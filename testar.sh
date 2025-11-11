docker build -t api_cep_php_mysql:v1 -f Dockerfile . 
kind load docker-image api_cep_php_mysql:v1 --name php-mysql-cluster

#kubectl delete -f k8s/mysql-deployment.yaml
#kubectl apply -f k8s/mysql-deployment.yaml

kubectl delete -f k8s/php-deployment.yaml
kubectl apply -f k8s/php-deployment.yaml