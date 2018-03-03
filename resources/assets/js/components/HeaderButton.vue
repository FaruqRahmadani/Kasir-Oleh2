<template>
  <button class="btn btn-sm btn-warning btn-icon" v-if="status" @click="ubahstatus">
    <i class="fa fa-close"></i>
    Batal
  </button>
  <button class="btn btn-sm btn-success btn-icon" v-else @click="ubahstatus">
    <i class="fa fa-plus"></i>
    Tambah Kategori
  </button>
</template>

<script>
export default {
  props: ['status'],
  methods: {
    ubahstatus(){
      if (vm.status) {
        vm.status = 0
      }else {
        vm.status = 1
        vm.datavalue = ''
      }
    }
  },
}
</script>
