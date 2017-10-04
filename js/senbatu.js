var insert_form_list = new Vue({
  el: '#insert_form_box',
  data: {
    lists: [
      { name: 'id', text: 'ID', pleceholder: 'enter your id number' },
      { name: 'name', text: 'Product name', pleceholder: 'enter product name' },
      { name: 'price', text: 'price', pleceholder: 'enter product price' }//,
      //{ name: 'image', text: '画像', pleceholder: 'enter image name' }
    ]
  }
});
