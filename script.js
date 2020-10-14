function editar(id, txtTarefa, where){
			
				//Form programático de edição
				let form = document.createElement('form')
				alert(txtTarefa)
				form.action = where+'.php?pag='+where+'&acao=atualizar'
				form.method = 'post'
				form.className = 'row'

				//input de entrada de texto
				let inputTarefa = document.createElement('input')
				inputTarefa.type = 'text'
				inputTarefa.name = 'tarefa'
				inputTarefa.className = 'col-9 form-control'
				inputTarefa.value = txtTarefa

				//button
				let button = document.createElement('button')
				button.type = 'submit'
				button.className = 'col-3 btn btn-info'
				button.innerHTML = 'Atualizar'

				//input hidden
				let inputId = document.createElement('input')
				inputId.type = 'hidden'
				inputId.name = 'id'
				inputId.value = id

				form.appendChild(inputTarefa)
				form.appendChild(button)
				form.appendChild(inputId)

				console.log(form)

				let tarefa = document.getElementById('tarefa_'+id)
				
				//limpar o texto da tarefa
				tarefa.innerHTML = ''

				//incluir form
				tarefa.insertBefore(form, tarefa[0])	
			}

			function deletar(id, where){ 
				location.href = where+'.php?pag='+where+'&acao=remover&id='+id
				//todas_tarefas
			}

			function realizada(id, where){
				location.href = where+'.php?pag='+where+'&acao=realizada&id='+id
				//todas_tarefas
			}