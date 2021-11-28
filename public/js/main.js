   
const form_data = document.querySelector('form')
const msg = document.querySelector('#message')
const inpt_content = document.querySelector('#content')
const get_all_content = document.querySelectorAll('.all_content_get')
const get_content_detail = document.querySelector('.get_content_detail')
const all_content = document.querySelectorAll('.all_content')
const articel = document.querySelector('article')

if(msg) { setTimeout(() => { msg.style.display = "none" }, 10000)}
get_all_content.forEach((elem, index) => { 
        let text = JSON.parse(elem.innerHTML)
        for(let data of text) {
          if(data.type == 'paragraph') {
            let text_content =  data.data.text
              if(text_content.length > 120) all_content[index].innerHTML =text_content.substring(0, 120) + '...'
              else all_content[index].innerHTML =text_content
              break
            }
          }

        })

let data_editor = []
if(inpt_content == null || inpt_content.value == "") data_editor
else {
        let data_content_parser = JSON.parse(inpt_content.value)
        data_editor.push(data_content_parser)
      } 

      
let data_content = []
if(get_content_detail) { 

    const get_content = JSON.parse(get_content_detail.innerText)
    get_content.forEach((data) => { 
        if(data.type == 'paragraph') data_content.push(`<p class="my-4"> ${data.data.text} </p>`) 
        if(data.type == 'image'){
        data_content.push(` <div class="flex justify-center mb-16">
                                <img src='${data.data.file.url}' class="cursor-pointer" alt='${data.data.caption}'/>
                                </div>`)
          }     
        if(data.type == 'header') { 
            for(let h =1; h<7; h++) {
              if(h == data.data.level)  data_content.push(`<h${h} class="text-2xl mb-2 font-semibold"> ${data.data.text} </h${h}>`)
            }    
          }

        if(data.type == 'list') { 
              let item_list = ''
              data.data.items.forEach((item) => {
                  item_list += `<li> ${item} </li>`
              })
              data_content.push(`<ul class="list-decimal"> ${item_list} </ul>`)
            }
        })

    data_content.forEach((elem => { 
        articel.innerHTML += elem
      }))

      const link_content = articel.querySelectorAll('a')
      if(link_content) { 
        link_content.forEach((elem => { elem.classList = 'text-blue-900 hover:underline' }))
        
      }
        
      }
      
        



const editor = new EditorJS({
    
      readOnly: false,
     
      holder: 'editorjs',

      tools: {
      
        header: {
          class: Header,
          inlineToolbar: ['link'],
          config: {
            placeholder: 'Header'
          },
          shortcut: 'CMD+SHIFT+H'
        },

        
        image:{ 
          
          class: ImageTool, 
          config: {
        endpoints: {
          byFile: '/api/upload', 
          byUrl: '/api/upload'
        }
      }
        
        } ,

        list: {
          class: List,
          inlineToolbar: true,
          shortcut: 'CMD+SHIFT+L'
        },

     

      },

      data: {blocks: data_editor[0]},
    });

  const link_tolbar =document.querySelector('li').getAttribute('linkTool')


form_data.addEventListener('submit', (e) => { 
        editor.save().then((OptputData => { 
          inpt_content.value = JSON.stringify(OptputData.blocks)   
        }))
      })