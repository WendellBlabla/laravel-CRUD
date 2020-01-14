<template>
<div id="app2" class="input-group mb-3">
<p>{{ message }}</p>
  <input  v-model="message" type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Pesquisar</button>
  </div>
</div>
</template>