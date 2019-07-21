
$('.editor').summernote({
  fontSizes: ['10', '14'],
  toolbar: [
    // [groupName, [list of button]]
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough']],
    ['fontsize', ['fontsize']],
    ['para', ['ul', 'ol', 'paragraph']]
    ],
      placeholder: 'Write here ....',
      tabsize: 2,
      height: 200
});

Dropzone.autoDiscover = false;
$(function() {
  $('.dropzone[data-limit="1"]').dropzone({
    url: '/application/classes/sub-classes/ajax-upload.php',
    maxFiles: 1,
    init: function () {
        this.on("sending", function(file, xhr, formData) {
          formData.append("type", this.element.dataset.for);
        });
        this.on("success", function (file, response) {
            console.log(response);
            $('input[name="'+this.element.dataset.child+'"]').val(response);
        });
        this.on("error", function (file, error, xhr) {
            console.log(error);
        });
      }
  });
  $('.dropzone[data-limit="5"]').dropzone({
    url: '/application/classes/sub-classes/ajax-upload.php',
    maxFiles: 5,
    init: function () {
        this.on("sending", function(file, xhr, formData) {
          formData.append("type", this.element.dataset.for);
        });
        this.on("success", function (file, response) {
            console.log(response);
            var input = $('input[name="'+this.element.dataset.child+'"]');
            var inputVal = input.val() == "null" ? response : input.val()+','+response;
            input.val(inputVal);
            console.log(inputVal);
        });
        this.on("error", function (file, error, xhr) {
            console.log(error);
        });
      }
  });
})
