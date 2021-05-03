Vue.config.devtools = true;

var app = new Vue({
  el: '#root',
  data: {
    albums: [],
    genres: [],
    artists: [],
    selectedGenre: '',
    selectedArtist: '',
    albumsByArtist: []
  },
  created() {
    axios.get('http://localhost/php-ajax-dischi/call_albums.php')
      .then((response) => {
        this.albums = response.data;

        this.albums.forEach((item, i) => {
          if (!this.artists.includes(item.author)) {
            this.artists.push(item.author);
          }
        });
    });

    axios.get('http://localhost/php-ajax-dischi/call_genres.php')
      .then((response) => {
        this.genres = response.data;
    });

  },
  computed: {
    albumsComputed: function () {
      if (this.selectedArtist == '') {
        return this.albums;
      } else {
        axios.get(`http://localhost/php-ajax-dischi/call_artist.php/?artist=${this.selectedArtist}`)
          .then((response) => {
            this.albumsByArtist = response.data;
          });
        return this.albumsByArtist;
      }
    }
  }
});
