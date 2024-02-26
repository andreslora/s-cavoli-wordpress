const Fontagon = require('fontagon')
 
Fontagon({
  files: [
    'img/icons/*.svg'
  ],
  dist: 'css/icons',
  fontName: 'icons',
  style: 'css',
  classOptions: {
    baseClass: 'icon',
    classPrefix: 'icon'
  }
}).then((opts) => {
  console.log('done! ' ,opts)
}).catch((err) => {
  console.log('fail! ', err)
})