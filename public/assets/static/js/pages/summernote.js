$("#summernote").summernote({
    toolbar: [
        // [groupName, [list of button]]
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['font', ['strikethrough']],
        ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']]
    ],
    tabsize: 2,
    height: 220,
})
$(function () {
    bsCustomFileInput.init();
});
$('.select2').select2()
$("#hint").summernote({
    height: 100,
    toolbar: false,
    placeholder: "type with apple, orange, watermelon and lemon",
    hint: {
        words: ["apple", "orange", "watermelon", "lemon"],
        match: /\b(\w{1,})$/,
        search: function (keyword, callback) {
            callback(
                $.grep(this.words, function (item) {
                    return item.indexOf(keyword) === 0
                })
            )
        },
    },
})
