const red = document.querySelector('#red')
const green = document.querySelector('#green')
const blue = document.querySelector('#blue')
const alpha = document.querySelector('#alpha')
const color = document.querySelector('.color')


red.addEventListener('input', function () {
    let r = parseInt(red.value)
    let g = parseInt(green.value)
    let b = parseInt(blue.value)
    let result = r + g + b

    color.style.backgroundColor = 'rgba(' + r + ',' + g + ',' + b + ',' + alpha.value + ')'
    color.innerHTML = 'rgba(' + r + ',' + g + ',' + b + ',' + alpha.value + ')'

    if (result > 480 || alpha.value < 0.5) {
        color.style.color = '#000000'
    } else {
        color.style.color = '#FFFFFF'
    }
})

green.addEventListener('input', function () {
    let r = parseInt(red.value)
    let g = parseInt(green.value)
    let b = parseInt(blue.value)
    let result = r + g + b

    color.style.backgroundColor = 'rgba(' + r + ',' + g + ',' + b + ',' + alpha.value + ')'
    color.innerHTML = 'rgba(' + r + ',' + g + ',' + b + ',' + alpha.value + ')'

    if (result > 480 || alpha.value < 0.5) {
        color.style.color = '#000000'
    } else {
        color.style.color = '#FFFFFF'
    }
})

blue.addEventListener('input', function () {
    let r = parseInt(red.value)
    let g = parseInt(green.value)
    let b = parseInt(blue.value)
    let result = r + g + b

    color.style.backgroundColor = 'rgba(' + r + ',' + g + ',' + b + ',' + alpha.value + ')'
    color.innerHTML = 'rgba(' + r + ',' + g + ',' + b + ',' + alpha.value + ')'

    if (result > 480 || alpha.value < 0.5) {
        color.style.color = '#000000'
    } else {
        color.style.color = '#FFFFFF'
    }
})

alpha.addEventListener('input', function () {
    let r = parseInt(red.value)
    let g = parseInt(green.value)
    let b = parseInt(blue.value)
    let result = r + g + b

    color.style.backgroundColor = 'rgba(' + r + ',' + g + ',' + b + ',' + alpha.value + ')'
    color.innerHTML = 'rgba(' + r + ',' + g + ',' + b + ',' + alpha.value + ')'

    if (result > 480 || alpha.value < 0.5) {
        color.style.color = '#000000'
    } else {
        color.style.color = '#FFFFFF'
    }
})