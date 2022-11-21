## Envio de informações para o PHP
- No arquivo do formulário é importante o *action* do form estar configurado para o arquivo php que irá receber as informações.
- Importante escolher entre os métodos *get* e *post* qual o mais adequado para usar, lembrando que:
-- get: envia as informações na url
-- post: envia as informações de forma oculta
- exemplo de formulário:
```html
<form action="validar.php" method="post">
    Usuário:<input name="usuario"><br>
    Senha:<input name="senha" type="password"><br>
    <button type="submit">Entrar</button>
    <button type="reset">Limpar</button>
</form>
```

## Operadores relacionais
- `> maior`
- `< menor`
- `>= maior igual`
- `<= menor igual`
- `!= diferente`
- `== igual`

## Estrutura de decisão
- serve para você tomar uma decisão de acordo com o resultado de uma condição, caso o resultado seja TRUE você pode executar uma ação, caso seja FALSE pode executar outra ação

### if simples
```php
if(condição){
    resposta verdadeira
}
```

### if else
```php
if(condição){
    resposta verdadeira
}else{
    resposta falsa
}
```

### if, else if, else
```php
if(condição){
    resposta verdadeira do if
}else if(condição){
    resposta verdadeira do else if
}else{
    resposta falsa
}
```
#### Exemplo
```php
if($user == 123 && $password == 'guto'){
    echo "dados correto";
}else{
    echo "dados incorretos";
}
```

## Redirecionamento de página
- para redirecionar podemos utilizar o comando `header('Location: arquivo.php')`. Exemplo:
```php
header('Location: panel.php');