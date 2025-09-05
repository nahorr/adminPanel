// $("#summernote").summernote({
//   tabsize: 2,
//   height: 520,
// })
// $("#hint").summernote({
//   height: 100,
//   toolbar: false,
//   placeholder: "type with apple, orange, watermelon and lemon",
//   hint: {
//     words: ["apple", "orange", "watermelon", "lemon"],
//     match: /\b(\w{1,})$/,
//     search: function (keyword, callback) {
//       callback(
//         $.grep(this.words, function (item) {
//           return item.indexOf(keyword) === 0
//         })
//       )
//     },
//   },
// })


// Init ALL Summernote editors that share the .rich-text class
$('.rich-text').summernote({
  tabsize: 2,
  height: 520,            // same height for both; change if you like
  toolbar: [
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['insert', ['link', 'picture']],
    ['view', ['fullscreen', 'codeview']]
  ]
});

// Keep your hint editor separate (if you actually render it)
$('#hint').summernote({
  height: 100,
  toolbar: false,
  placeholder: 'type with apple, orange, watermelon and lemon',
  hint: {
    words: ['apple', 'orange', 'watermelon', 'lemon'],
    match: /\b(\w{1,})$/,
    search: function (keyword, callback) {
      callback($.grep(this.words, function (item) {
        return item.indexOf(keyword) === 0;
      }));
    }
  }
});

