# Breakdown:

- name
	- Required
	- Name of the Variable
- type
	- Required
	- Validation check for the variable. EG string, boolean
- value
	- Required
	- Value to use for the Variable
	- If Variable is set (EG ${SOME_VARIABLE}) this will be used as a reference with the source
- source
	- Optional
	- Source to use for the Variable
	- If no source is set, local ENV will be used as default
- default
	- Optional
	- The default Value to use if nothing is set in the source
	- If no default is set and there is no value found in the source a error will occur, unless nullable is set to true
- nullable
	- Optional
	- Allow the variable to be set to null


# Sources:

- Env
- Git
- Last Pass
- Vault

# Examples

## Hard Coded

```
- name: APP_NAME
  type: string
  value: services-api-gateway
```

## Use Env as Source

```
- name: APP_ENV
  type: string
  value: ${APP_ENV}
```

## Use Git as Source

```
- name: QUEUE_AWS_ACCOUNT_ID
  type: string
  value: ${QUEUE_AWS_ACCOUNT_ID}
  source: git
```

## Use Git as Source but set a default if not found

```
- name: QUEUE_AWS_REGION
  type: string
  value: ${QUEUE_AWS_REGION}
  source: git
  default: eu-west-1
```