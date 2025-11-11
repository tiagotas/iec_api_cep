             PASSOS PARA USAR A API LOCALMENTE

1) `kind create cluster --name php-mysql-cluster --config k8s/kind-config.yaml`
2) `kubectl cluster-info --context kind-php-mysql-cluster`
3) `docker build -t api_cep_php_mysql:v1 -f Dockerfile . `
4) `kind load docker-image api_cep_php_mysql:v1 --name php-mysql-cluster`
5) `kubectl apply -f k8s/mysql-deployment.yaml`
6) `kubectl apply -f k8s/php-deployment.yaml`






1) Importe o Banco de Dados
2) Inicialize o servidor do PHP: php -S 0.0.0.0:8000

3) Altere na data service para:
   http://10.0.2.2:8000/endereco/by-cep?cep=17210580
   nos endereços onde tem cep.metoda.com.br, etc....

4) Confgure seu App Android para requisições inseguras
   (sem https) no arquivo AndroidManifest.xml:

   `<application  android:usesCleartextTraffic="true" ... />`

            Consumir uma API Caseira

- 1º Passo: faça o download (ou clone) da API Exemplo: https://github.com/tiagotas/ApiCep
- 2º Passo: Importe o Banco de Dados
- 3º Passo: Abra a pasta da API no VS Code
- 4º Passo: Abra o terminal
- 5º Passo: Comando: php -S localhost:8000
- 6º Passo: Teste no navegador com: http://localhost:8000/endereco/by-cep?cep=17210580
