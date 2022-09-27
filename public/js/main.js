   
const form_data = document.querySelector('form')
const msg = document.querySelector('#message')
const inpt_content = document.querySelector('#content')
const get_all_content = document.querySelectorAll('.all_content_get')
const get_content_detail = document.querySelector('.get_content_detail')
const all_content = document.querySelectorAll('.all_content')
const articel = document.querySelector('article')
const icon = document.querySelector('.icon')
const all_post_nav = document.querySelector('#all_post')
const create_post_nav = document.querySelector('#create_post')
const home_nav = document.querySelector('#home')
const editor_js = document.querySelector('#editorjs')
const url = location.href
const url_nav = url.replace(location.protocol+"//"+location.host, "")
const content_ren= document.querySelectorAll('.content_ren')
const show_content_ren = document.querySelectorAll('.show_content_ren')
const image_ren = document.querySelectorAll('.img')
const get_title = document.querySelector('.title')
const delete_post = document.querySelectorAll('.delete_post')


function getClassNav(nav_elem) { 
  let class_elem = ''
  nav_elem.classList.forEach(elem => { class_elem += elem+' '})
  return class_elem + ' border-indigo-400'
}

if(url_nav == '/all_post') all_post_nav.classList = getClassNav(all_post_nav)
else if (url_nav == '/') home_nav.classList = getClassNav(home_nav)
else if (url_nav == '/admin/create_post') create_post_nav.classList = getClassNav(create_post_nav) 


async function delete_img(files) { 
    let get_api = await fetch('/api/delete_img/'+files, {
      headers: {
        'Content-Type': 'application/json'
      },
      method: "DELETE"
    })
}


if(msg) { 
  msg.addEventListener('click', () => {msg.style.display = "none"})
  setTimeout(() => { msg.style.display = "none" }, 10000)
}

get_all_content.forEach((elem, index) => { 
        let text = JSON.parse(elem.innerHTML)
        if(delete_post[index]) { 
            delete_post[index].addEventListener('click', ()=> { 
              for(data of text) { 
                if(data.type == 'image') { 
                  let img_name = String(data.data.file.url).replace('/img/blog/', '')
                  delete_img(img_name)
                }
              }

            })
          }

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
            icon.setAttribute('href', data.data.file.url)
          

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

      
      document.title = get_title.innerText
      content_ren.forEach((elem, index) => { 
          let text = JSON.parse(elem.innerHTML)
          for(let data of text) { 
              if(data.type == 'image') { 
                  image_ren[index].setAttribute('src',data.data.file.url)
                  break
          }else { 
              image_ren[index].setAttribute('src', "/aaa.png")
          }
          }
          for(let data of text) {
  
            if(data.type == 'paragraph') {
              let text_content =  data.data.text
                if(text_content.length > 120) show_content_ren[index].innerHTML =text_content.substring(0, 50) + '...'
                else show_content_ren[index].innerHTML =text_content
                break
              }
            }
  
          })
        
      }
      
        

if(editor_js) { 

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

form_data.addEventListener('submit', (e) => { 
        editor.save().then((OptputData => { 
          inpt_content.value = JSON.stringify(OptputData.blocks)   
        }))
      })
}