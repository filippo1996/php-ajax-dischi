let app = new Vue({
    el: '#app',
    data: {
        urlDiscs: '//' + location.host + location.pathname + 'api/discs-api.php',
        discs: {},
        selected: '',
        options: [
            { text: 'Tutti', value: null },
            { text: 'Pop', value: 'pop' },
            { text: 'Jazz', value: 'jazz' },
            { text: 'Metal', value: 'metal' },
            { text: 'Rock', value: 'rock' }
        ]
    },
    mounted(){
        this.axiosGet();
        //console.log(location.protocol + '//' + location.host + location.pathname);
    },
    methods: {
        filterDiscs: function(event){
            this.axiosGet(event.target.value);
        },

        axiosGet: function(param = null){
            axios
            .get(this.urlDiscs, {
                params: {
                    genre: param
                }
            })
            .then(response => {
                this.discs = response.data;
            })
            .catch(error => {
                console.log(error);
            });
        }
    }
});