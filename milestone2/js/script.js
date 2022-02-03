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
        console.log(result.data);
        // popolo il mio dato così poi tramite vue riesco a stampare il mio dato in pagina
        this.discs = result.data.results;
      }).catch((error) => {
        console.log(error);
      })
    },
    methods: {
      changeGenre() {
        console.log(this.textSearch);
        axios.get('http://localhost:8888/php-ajax-dischi/milestone2/server/controller.php?genre=' + this.textSearch)
          .then((result) => {
            this.discs = result.data.results;
          })
          .catch((error) => {
            console.log(error);
          });
      }
    }
  }
);