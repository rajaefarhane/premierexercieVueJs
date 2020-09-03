<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div id="app">
<h1>{{ message }}</h1>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
<script>
const app = new Vue({
  el:'#app',
  data:{
    message:'bonjour'
  }
})
</script>
  </body>
</html>
