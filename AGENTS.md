# Development guidance

Keep the package framework-agnostic at its core. Laravel and Symfony integrations belong outside the core domain.

Health checks must be deterministic, timeout-aware and safe to execute repeatedly. Never expose secrets in results, logs or exceptions.

Workflow:
- `main`: stable releases
- `dev`: integration
- `feature/*`: short-lived implementation branches
- no pull requests required
- releases are Git tags from `main`

Every public behavior requires automated tests and static analysis.
