new Vue({
    el: "#vueContainer",
    data: {
        listAlbum: [],
    },
    mounted() {
        axios.get("http://localhost/php-ajax-dischi/api/albums.php")
        .then((resp) => {
            this.listAlbum = resp.data.albumList;
        })
    },
});