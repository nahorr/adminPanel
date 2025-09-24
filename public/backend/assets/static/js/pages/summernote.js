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
  height: 520,
  toolbar: [
    ['style', ['style']], // enables H1, H2, H3, etc.
    ['font', ['bold', 'italic', 'underline', 'clear']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['insert', ['link', 'picture']],
    ['view', ['fullscreen', 'codeview']]
  ],
  styleTags: [
    'p', 'blockquote', 'pre',            // defaults
    'h1', 'h2', 'h3', 'h4', 'h5', 'h6'  // add heading tags
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

