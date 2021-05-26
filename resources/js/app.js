require('./bootstrap');

Vue.config.devtools = true;

var app = new Vue ({
    el: '#root',
    data: {
        deleteThis: false,
    },
    methods: {
        deleteComic: function() {
            this.deleteThis = true;
        }
    },
});