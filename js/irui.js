var list_box = new Vue({
  el: '#list_box',
  data: {
    lists: [
      { href: './view/insertForm.php', text: 'Regist Page' },
      { href: './view/deleteForm.php', text: 'Delete Page' },
      { href: './view/updateForm.php', text: 'Update Page' },
      { href: './view/view.php', text: 'List Page' },
      { href: './view/searchForm.php', text: 'Search Page' },
      { href: './view/searchForm2.php', text: 'Search Page Ver2 (product name LIKE)' },
      { href: './view/view2.php', text: 'Search Page Ver2 (update, delete)' },
      { href: './view/searchForm3.php', text: 'Search Page Ver3 (search in page)' }
    ]
  }
});
