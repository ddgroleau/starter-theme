$name = $args[0];

try {
    docker stop $name && docker rm $name
}
catch {
    Write-Output "No active $name container."
}

docker compose up --detach;
