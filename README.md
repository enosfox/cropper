# Cropper @KitsuneCode

###### Cropper is a component that simplifies the creation of JPG, PNG and WEBP (by default how thumbnails are converted to webP) image thumbnails with a cache engine. Cropper CC creates your image for each part required in the application with zero complexity.

Cropper é um componente que simplifica a criação de miniaturas de imagens JPG, PNG e WEBP (por padrão as miniaturas são convertidas para webP) com um motor de cache. O Cropper CC cria versões de suas imagens para cada dimensão necessária na aplicação com zero de complexidade.

## About KitsuneCode

###### KitsuneCode is a set of small and optimized PHP components for common tasks. Held by Enos S. S. Silva and the Kitsune team. With them you perform routine tasks with fewer lines, writing less and doing much more.

KitsuneCode é um conjunto de pequenos e otimizados componentes PHP para tarefas comuns. Mantido por Enos S. S. Silva e a equipe Kitsune. Com eles você executa tarefas rotineiras com poucas linhas, escrevendo menos e fazendo muito mais.

### Highlights

- Simple Thumbnail Creator (Simples criador de miniaturas)
- Cache optimization per dimension (Otimização em cache por dimensão)
- Media Control by Filename (Contrôle de mídias por nome do arquivo)
- Cache cleanup by filename and total (Limpeza de cache por nome de arquivo e total)
- Composer ready and PSR-2 compliant (Pronto para o composer e compatível com PSR-2)

## Installation

Cropper is available via Composer:

```bash
"kitsunecode/cropper": "2.0.*"
```

or run

```bash
composer require kitsunecode/cropper
```

## Documentation

###### They are just two methods to do all the work. You just need to call ***make*** to create or use thumbnails of any size, or ***flush*** to free the cache of a file or the entire folder. KitsuneCode Cropper works like this:

São apenas dois métodos para fazer todo o trabalho. Você só precisa chamar o ***make*** para criar ou usar miniaturas de qualquer tamanho, ou o ***flush*** para liberar o cache de um arquivo ou da pasta toda. KitsuneCode Cropper funciona assim:

#### Create thumbnails

```php
<?php
require __DIR__ . "/../src/Cropper.php";

$c = new \KitsuneCode\Cropper\Cropper("patch/to/cache");

echo "<img src='{$c->make("images/image.jpg", 500)}' alt='Image' title='Image'>";
echo "<img src='{$c->make("images/image.jpg", 500, 300)}' alt='Image' title='Image'>";
```

#### Clear cache

```php
<?php
require __DIR__ . "/../src/Cropper.php";

$c = new \KitsuneCode\Cropper\Cropper("patch/to/cache");

//flush by filename
$c->flush("images/image.jpg");

//flush cache folder
$c->flush();
```

## Support

###### Security: If you discover any security related issues, please email devenos@icloud.com instead of using the issue tracker.

Se você descobrir algum problema relacionado à segurança, envie um e-mail para devenos@icloud.com em vez de usar o rastreador de problemas.

Thank you

## Credits

- [Enos S. S. Silva](https://github.com/enosfox) (Developer)

## License

The MIT License (MIT). Please see [License File](https://github.com/enosfox/cropper/blob/master/LICENSE) for more information.