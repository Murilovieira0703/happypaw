# TCC-para-desenvolvimento
<div align="center">
<h4>Eai gente, aqui eu vou explicar o passo a passo de como vocês farão para utilizar o github em conjunto.</h4>
<BR>
<h1>Como enviar e gerenciar aquivos aqui no repositório:</h1>
</div>
<BR>
<p>deixarei aqui uma lista de comandos com explicações de como usa-los para facilitar a vida de vocês, tudo bem mastigado, e não lira, não é só baixar o arquivo ZIP kkkkkkk.</p>
<BR>
<p>Primeiramente vocês tem que ter aceitado no email o convite para colaborador que eu avisei no grupo, e logo após já terão  controle total sobre o nosso repositório, gente MUITO cuidado com qualquer alteração feita para não nos prejudicar, mas teremos algumas medidas a ser tomadas para nossa prevenção.</p>
<BR>

<p>Primeiramente para o git funcionar no nosso computador precisamos instala-lo, https://git-scm.com/download/win é só clicar em Click here to download e depois instalar aceitando tudo, não tem erro</p>

<p>para iniciarmos o processo de comandos na maquina, vocês vão no VScode e ABRAM ELE COMO ADMINISTRADOR, após isso abram um terminal, é só apertar "ctrl + ' " ou clicar em terminal lá em cima.
Após abrir o terminal vocês deverão clicar na setinha e mudar para git bash(não vai funcionar certinho se não for git bash)</p>

<p>Para iniciar o git no nosso computador usaremos o primeiro comando:
git init
e depois usaremos o git para monitorar o computador com:
git branch -M main</p>

<p>Agora para baixar todos os arquivos do projeto para seu computador é só digitar:
git clone https://github.com/Murilovieira0703/TCC-para-desenvolvimento.git</p>

<p>Antes de começarmos a subir aquivos para o repositório gostaria que todos que irão programar baixassem o gitlens, é uma extensão do vscode, é só apertar "ctrl + shift + X" que você abre a aba de extensões dai é só procurar por gitlens e baixar. Essa extensão nos dá um histórico de alterações, assim a gente consegue saber quem alterou e o que alterou e  quando alterou, assim se algum dia der um erro nós consiguiremos descobrir. https://www.youtube.com/watch?v=tYA276q6gDE esse video mostra como fuciona!</p>

<p>Para subir um arquivo basta digitar:
git add nomedoarquivo exemplo:"index.php" / desta forma ele só ira subir previamente o arquivo para o terminal, ele ainda não vai ser enviado para o repositório</p>

<p>Após ele subir o arquivo para o terminal, você terá que confirmar se o arquivo está correto para subir ao repositório para isso precisaremos usar alguns comandos prévios para o terminal confirmar nossa conta:
git config --global user.email "Seu email" e git config --global user.name "Seu nome" (esses comandos só precisam ser feitos uma vez, após isso o vscode já saberá quem é você ao abrir o projeto.)
assim então poderemos usar o comando para salvar os arquivos enviado ao terminal:
git commit -m "Aqui você ira escrever um titulo para alteração" esse titulo deve ser por exemplo: "alteração de design na página de ongs" ele serve para as outras pessoas terem uma prévia do que aconteceu.</p>

<p>E agora para enviar essa commit para o repositório definitivamente basta digitar:
git remote add origin https://github.com/Murilovieira0703/TCC-para-desenvolvimento.git para adicionar o repositório a maquina e 
git push -u origin main</p>

<p>Bom galera parece um pouco complicado mas é bem simples, vocês podem voltar aqui sempre que quiserem para ver esse documento também, isso vai facilitar muito nossa vida para programar em conjunto, obrigado!</p>



