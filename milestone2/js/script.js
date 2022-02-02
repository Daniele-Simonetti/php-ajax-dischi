const App = new Vue(
  {
    el: '#app',
    data: {
      discs: [],
    },
    created() {
      // faccio la chiamata ajax
      axios.get('http://localhost:8888/php-ajax-dischi/milestone2/server/controller.php?showing=all').then((result) => {
        // popolo il mio dato così poi tramite vue riesco a stampare il mio dato in pagina
        this.discs = result.data;
      }).catch((error) => {
        console.log(error);
      })
    }
  }
);