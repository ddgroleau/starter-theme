param([string]$name) 

try {
    docker stop $name && docker rm $name
}
catch {
    Write-Output "No active $name container."
}

docker system prune --force --volumes;
docker compose --file docker-compose.dev.yml up --detach;
cd wp-content/themes/$name && npx tailwindcss -i ./assets/css/style.css -o ./assets/css/tailwind.css --watch