
function initVue(){

    new Vue({
        el: '#app',
        data:{
            "albums": [],
            "select": "All",

        },
        mounted(){
            axios.get("data.php")
        .then(album => {
            console.log(album);
            //console.log(album.data);
            this.albums = album.data;
        })
        .catch(() => console.log('error'));
        }


    });
}

function init() {
    initVue();
}
document.addEventListener('DOMContentLoaded', init);