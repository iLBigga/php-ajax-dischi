const app = new Vue({
    el: '#app',
    data: {
        albums: [],
    },
    methods: {
        fetchAlbums(){
            axios
                .get('http://localhost//Esercizi/php-ajax-dischi/api/albums.php')
                .then((res) => {
                    this.albums = res.data
                });
        },
    },
    created() {
        this.fetchAlbums()
    },
})