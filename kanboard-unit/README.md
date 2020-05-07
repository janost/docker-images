# Kanboard + nginx unit

## What is this?

Kanboard running with nginx-unit in a container.

## How to use?

```
podman run -v /path/to/data:/app/data -p 8080:8080 janost/kanboard-unit
```

After the container has started, point your browser to http://127.0.0.1:8080