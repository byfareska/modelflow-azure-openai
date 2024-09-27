# Usage

```php
$adapter = new \ModelflowAi\OpenaiAdapter\Embeddings\OpenaiEmbeddingAdapter(
    AzureOpenai::client(
        'https://anexampleproject.openai.azure.com/openai/deployments/thedeployment', //yours endpoint
        'theapikey' // yours class
    ),
    'text-embedding-3-large' //the model that you want to use
);
```