<x-page title="Tabs">
<x-p>
    You can add tabs and group fields on the form for convenience
</x-p>

<x-code language="php">
use Leeto\MoonShine\Decorations\Block;
use Leeto\MoonShine\Decorations\Tabs;
use Leeto\MoonShine\Decorations\Tab;
use Leeto\MoonShine\Fields\Text;

//...
public function fields(): array
{
    return [
        Block::make('Main', [
            Tabs::make([
                Tab::make('Seo', [
                    Text::make('Seo title')
                        ->fieldContainer(false),
                    //...
                ]),
                Tab::make('Categories', [
                    //...
                ])
            ])
        ]),
    ];
}
//...
</x-code>

<x-image theme="light" src="{{ asset('screenshots/tabs.png') }}"></x-image>
<x-image theme="dark" src="{{ asset('screenshots/tabs_dark.png') }}"></x-image>

</x-page>
