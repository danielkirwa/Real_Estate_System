var app = new Vue({
  el: '#app',
  data: {
    title: 'Admin Panel',
    contentDisplay: false,
    settingsDisplay: false,
    usermmanDisplay: false,
    info: [
      {
        stat: 163,
        name: 'New Users Today',
       
        
      },
      {
        stat: 56,
        name: 'Requests Today',
        
      },
      {
        stat: 34,
        name: 'Requests Resolved Today'
      },
      {
        stat: .5,
        name: 'Average Days Spend on Request'
      }
      
    ],
    navigation: [
      {
        link: '#',
        label: 'Dashboard',
        
        
    },
      {
        link: '#',
        label: 'Settings',
        
    },
      {
        link: '#',
        label: 'User Management',
       
    }
      
      
    ],
    
  },
  methods: {
    dashboard: function(){
      this.contentDisplay = true;;
    }
  },
    
  computed: {}
});