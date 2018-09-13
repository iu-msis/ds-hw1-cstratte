var userinfo = new Vue({

  el: 'UserInfo',

  data: {
  },

  methods: {
    fetchInfo() {
      fetch('')
      .then(response => response.json())
      .then(json => (userinfo.data = json})
      .catch(err => {
        console.log('TASK FETCH ERROR:');
        console.log(err);
      })
    },
    created() {
      this.fetchInfo()
    }
}
})
