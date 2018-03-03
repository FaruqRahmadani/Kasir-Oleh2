<template>
  <form class="register-form" :action="urlform" role="form" files="true" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" id="csrf-token" :value="token" />
    <div class="form-group">
      <label class="control-label label-form col-md-2 col-sm-2 col-md-12">
        Nama Kategori
      </label>
      <div class="col-md-9 col-sm-9 col-md-12">
        <input type="text" class="form-control border-input col-md-12 col-xs-12" name="nama_kategori" required :value="datavalue.nama_kategori">
      </div>
      <div class="text-center">
        <button class="btn btn-info btn-wd">
          <i class="fa fa-save"></i>
          Submit
        </button>
      </div>
      <hr>
    </div>
  </form>
</template>

<script>
export default {
  props: ['urlform', 'token', 'datavalue']
}
</script>
