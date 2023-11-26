import './bootstrap';

// document.querySelector('#category_id').addEventListener('change', function () {
//     if(!this.querySelector(`#category-${this.value}`)) {
//         document.querySelector("#attributes").innerHTML = ""
//         return
//     }
//     const attributes = JSON.parse(this.querySelector(`#category-${this.value}`).dataset.adAttributes)
//
//     let html = ''
//
//     attributes.forEach(attr => {
//         html += `
//         <label for="${attr.name}">${attr.name}</label>
//         <input type="${attr.type}" class="form-control" name="${attr.name}" id="${attr.name}">
//         `
//     });
//
//     document.querySelector("#attributes").innerHTML = html
// });
