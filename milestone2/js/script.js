const App = new Vue(
  {
    el: '#app',
    data: {
      discs: [],
      textSearch: 'all',
    },
    created() {
      // faccio la chiamata ajax
      axios.get('http://localhost:8888/php-ajax-dischi/milestone2/server/controller.php?genre=all').then((result) => {
        // popolo il mio dato così poi tramite vue riesco a stampare il mio dato in pagina
        this.discs = result.data;
      }).catch((error) => {
        console.log(error);
      })
    },
    methods: {
      changeGenre() {
        console.log(this.textSearch);
        axios.get().then().catch();
      }
    }
  }
);