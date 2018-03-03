<template>
  <button class="btn btn-sm btn-success btn-icon" @click="edit(iddata, url, datavalue)">
    <i class="fa fa-pencil"></i>
  </button>
</template>

<script>
export default {
  props: ['iddata', 'url', 'datavalue'],
  methods: {
    edit(id, url, datavalue){
      axios({
          method: 'get',
          url: '/api/kategori/'+id,
        }).then((response) => {
          vm.urlform = url,
          vm.status = 1,
          vm.tipeform = 'edit',
          vm.datavalue = response.data
        })
    },
  },
}
</script>
