<template>
  <button class="btn btn-sm btn-danger btn-icon"  v-if="jumlah > 0" @click="cantHapus">
    <i class="fa fa-trash"></i>
  </button>
  <button class="btn btn-sm btn-danger btn-icon"  v-else @click="hapus(url)">
    <i class="fa fa-trash"></i>
  </button>
</template>

<script>
export default {
  props: ['jumlah', 'url'],
  methods: {
    hapus(url){
      console.log(url);
      swal({
        title   : "Hapus",
        text    : "Yakin Ingin Menghapus Data?",
        icon    : "warning",
        buttons : [
          "Tidak",
          "Iya",
        ],
      })
      .then((hapus) => {
        if (hapus) {
          window.location = url;
        } else {
          swal({
            title  : "Batal Hapus",
            text   : "Batal Menghapus Data",
            icon   : "info",
            timer  : 2500,
          })
        }
      });
    },
    cantHapus(){
      swal({
        title: 'Hapus',
        text: 'Data Tidak dapat di Hapus',
        icon: 'warning',
        button: "OK",
      });
    },
  },
}
</script>
