// handle the cool cursor
const $cursor = document.querySelector('.cursor')
const $insideCursor = document.querySelector('.inside_cursor')
let radius = 40
let cursorX = 4
let cursorY = 4
const event = 0

const mouse = {
  x: 0,
  y: 0
}

document.addEventListener('mousemove', (event) => {
  mouse.x = event.clientX - 6
  mouse.y = event.clientY - 6

})

const loop = (event) => {
  window.requestAnimationFrame(loop)

  const newCursorX = cursorX + (mouse.x - cursorX) * 0.1
  const newCursorY = cursorY + (mouse.y - cursorY) * 0.1

  const distanceX = newCursorX - cursorX
  const distanceY = newCursorY - cursorY

  cursorX = newCursorX
  cursorY = newCursorY

  const scale = 1 + Math.hypot(distanceX, distanceY) / 15

  $cursor.style.transform = `translateX(${cursorX}px) translateY(${cursorY}px) scale(${scale})`
}
loop()

// cool cursor 2
const $cursorPoint = document.querySelector('.cursor-fixed')
let cursorPointX = 0
let cursorPointY = 0

let mousePointX = 0
let mousePointY = 0

document.addEventListener('mousemove', (event2) => {
  mousePointX = event2.clientX - 3
  mousePointY = event2.clientY - 3
  $cursorPoint.style.transform = `translateX(${mousePointX}px) translateY(${mousePointY}px)`
})

document.addEventListener('mousedown', (event) => {
  $cursor.style.width = '50px'
  $cursor.style.height = '50px'
  $cursor.style.transition = 'width 0.2s ease-in-out, height 0.2s ease-in-out'
})
document.addEventListener('mouseup', (event) => {
  setTimeout(() => {

    $cursor.style.width = '30px'
    $cursor.style.height = '30px'
  }, 100)
})