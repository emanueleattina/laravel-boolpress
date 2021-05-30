const { default: Axios } = require('axios');

require('./bootstrap');

Vue.config.devtools = true;

var app = new Vue ({
    el: '#root',
    data: {
        deleteThis: false,
        id: null,
    },
    methods: {
        deletePost: function(id) {
            this.deleteThis = true;
            this.id = id;
        },
        deleteConfirm: function() {
            axios.delete(`http://localhost:8000/admin/posts/${this.id}`);
            this.deleteThis = false;
        }
    },
});