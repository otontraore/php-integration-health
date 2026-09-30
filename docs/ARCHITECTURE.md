# Architecture

The core models a dependency/integration, health check definition, execution result and aggregate health status.

Layers:
1. Domain contracts and value objects
2. Check execution
3. Result aggregation
4. Persistence/history contracts
5. Laravel integration
6. Symfony integration

Security rules:
- never store credentials by default
- redact headers and payloads
- never include authorization tokens in exceptions
- enforce timeouts
- support deterministic fake checkers for tests

The package should support HTTP, database, cache, queue and custom checks through adapters rather than hard-coding providers.
