window.logout = function ()
{
  swal({
    title   : "Logout",
    text    : "Yakin Ingin Keluar?",
    icon    : "warning",
    buttons : [
      "Batal",
      "Logout",
    ],
  })
  .then((logout) => {
    if (logout) {
      swal({
        title  : "Logout",
        text   : "Anda Telah Logout",
        icon   : "success",
        timer  : 2500,
      });
      window.location = "/logout";
    } else {
      swal({
        title  : "Batal Logout",
        text   : "Anda Batal Logout",
        icon   : "info",
        timer  : 2500,
      })
    }
  });
}

window.notif = function (tipe, judul, pesan)
{
  swal({
    title: judul,
    text: pesan,
    icon: tipe,
    button: "OK",
  });
}

$(document).ready( function () {
    $('#datatable').DataTable({
      "responsive": true,
      "ordering": false,
      "language": {
        "url" : "http://cdn.datatables.net/plug-ins/1.10.9/i18n/Indonesian.json",
      }
    });
} );

Vue.component('form-kategori', require('./../components/FormKategori.vue'));
Vue.component('button-header', require('./../components/HeaderButton.vue'));
Vue.component('buttonhapus-table', require('./../components/TableButtonHapus.vue'));
Vue.component('buttonedit-table', require('./../components/TableButtonEdit.vue'));

var vm = new Vue({
  el: '#app',
  data: {
    status: 0,
    tipeform: 'create',
    urlform: '',
    token: '',
    datavalue: '',
  }
});

global.vm = vm;
