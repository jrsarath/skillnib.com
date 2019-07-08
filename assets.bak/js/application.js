function get_query (key) {
  return decodeURIComponent(window.location.search.replace(new RegExp("^(?:.*[&\\?]" + encodeURIComponent(key).replace(/[\.\+\*]/g, "\\$&") + "(?:\\=([^&]*))?)?.*$", "i"), "$1"));
}

$(document).ready(function(){
  $(function() {
      $('#write-review-rating').barrating({
        theme: 'bars-square',
        hoverState: true,
        showSelectedRating: true,
        reverse: false,
        showValues: true,
      });
  });

  // TINYMCE
  tinymce.init({
      selector: ".post-content",
      height: 400,
      menubar: false,
      branding: false,
      plugins: [
          "advlist autolink lists link image charmap print preview anchor",
          "searchreplace visualblocks",
          "insertdatetime media table paste emoticons wordcount"
      ],
      toolbar: "insertfile undo redo | styleselect | template emoticons bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
      images_upload_url: '/inc/classes/upload_helper.php',

      // override default upload handler to simulate successful upload
      images_upload_handler: function (blobInfo, success, failure) {
        var xhr, formData;

        xhr = new XMLHttpRequest();
        xhr.withCredentials = false;
        xhr.open('POST', '/inc/classes/upload_helper.php');

        xhr.onload = function() {
            var json;
            console.log(xhr.responseText);
            if (xhr.status != 200) {
                failure('HTTP Error: ' + xhr.status);
                return;
            }

            json = JSON.parse(xhr.responseText);

            if (!json || typeof json.location != 'string') {
                failure('Invalid JSON: ' + xhr.responseText);
                return;
            }

            success(json.location);
        };

        formData = new FormData();
        formData.append('file', blobInfo.blob(), blobInfo.filename());
        formData.append('post_image', true);

        xhr.send(formData);
    },
      init_instance_callback: function (editor) {
        editor.on('blur', function (e) {
          $('input[name="post-ready-content"]').val(tinyMCE.get('post-content').getContent());
        });
        editor.on('MouseLeave', function (e) {
          $('input[name="post-ready-content"]').val(tinyMCE.get('post-content').getContent());
        });
      },
      templates: [
        {title: 'ADD MCQ', description: 'Add one Multiple Choice Question set, Please follow given pattern, please dont add more than 3 answers, and please dont modify the pattern',
        content: `
          <p>Question name</p>
            <ol>
              <li>answer one</li>
              <li>answer two</li>
              <li>answer three</li>
            </ol><p>correct answer = 1
          </p>`
        },
      ]
  });
  // END TINYMCE

  $('.post-contents p:has(img)').css('padding', '0px');
  $('#activate-review-tab').click(function(e){
    e.preventDefault();
    $('[data-toggle="tab"][data-target="' + $('#activate-review-tab').attr('data-target') + '"]').trigger('click');
  })

  // MCQ CATEGORY SORTING
  $('#view-mcq select[name="mcq-subcategory"] option[data-parent="'+$('#view-mcq select[name="mcq-category"]').val()+'"]').attr('hidden', false);
  $('#view-mcq select[name="mcq-category"]').change(function(){
    $('#view-mcq select[name="mcq-subcategory"] option').attr('hidden', true);
    $('#view-mcq select[name="mcq-subcategory"] option[data-parent="'+$('#view-mcq select[name="mcq-category"]').val()+'"]').attr('hidden', false);
  });

  // SET SEARCH BAR AS PER SEARCH URL QUERY
  $(function(){
    if (get_query('city') != '') {
      $("select[name='city']").val(get_query('city'));
    }
    if (get_query('q') != '') {
      $("input[name='q']").val(get_query('q'));
    }
  })

  // 404 MODAL
  $(function(){
    if (get_query('404') == "true") {
      Swal.fire(
        '404!',
        'Requested Link not found!',
        'error'
      )
    }
  })
  // REMOVE MENU FROM LOGIN/SIGNUP
  if (window.location.pathname == '/login' || window.location.pathname == '/signup') {
    $('.cp-nav-2').remove();
  }

  $('.droopmenu-navbar').droopmenu();
  // PREVENT POST DATA AFTER RESET
  if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
  }


  // HIDE LOADER
  $('.loader').fadeOut('300');
})
