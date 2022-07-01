# Chain of Responsability - Padrão de projeto comportamental

Permite que vários objetos tratem uma determinada solicitação/requisição. 

Exemplo de requisição de usuário e senha:
Delega pra um objeto limpar esses dados -> outro objeto checa na base de dados -> se existe, outro objeto verifica se tem permissão pra acessar aquela pagina

## Intenção oficial
Evita o acoplamento do remetente de uma solicitação ao seu destinatário, dando a mais de um objeto a chance de tratar a solicitação. Encadeia os objetos receptores e passa a solicitação ao longo da cadeia até que um objeto a trate.

## Sobre o Chain Of Responsibility
- É usado quando uma requisição precisa passar por uma sequência de operações até ser totalmente tratada
- Desacopla quem envia de quem vai tratar a requisição (O primeiro objeto não conhece o último)
- É muito usado com requisições HTTP
- Permite que um objeto TRATE a requisição e chame o PRÓXIMO objeto da cadeia
- Permite que um objeto NÃO TRATE a requisição e chame o PRÓXIMO objeto da cadeia
- Permite que um objeto TRATE a requisição e FINALIZE a cadeia
- Permite que um objeto NÃO TRATE a requisição e FINALIZE a cadeia
- O cliente pode iniciar a requisição de qualquer objeto caso necessário

## Adaptação:
As informações desse repositório foram feitas como base no ensino do mestre Otávio Miranda [Link do vídeo](https://www.youtube.com/watch?v=AdzLq9FVTXs), mas adaptei o código de exemplo pra PHP, pra realizar uma apresentação.