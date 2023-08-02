<form
    class="space-y-5 md:w-1/2"
    wire:submit.prevent='createVacant'
>
    <div>
        <x-input-label
            for="title"
            :value="'Título de la vacante'"
        />
        <x-text-input
            class="mt-1 block w-full"
            id="title"
            name="title"
            type="text"
            wire:model="title"
            :value="old('title')"
            placeholder="Título de la vacante"
        />
        {{-- <x-input-error
            class="mt-2"
            :messages="$errors->get('title')"
        /> --}}
        @error('title')
            <livewire:show-error
                class="mt-2"
                :message="$message"
            />
        @enderror
    </div>

    <div>
        <x-input-label
            for="salary"
            :value="'Salario mensual'"
        />
        <select
            class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-indigo-600 dark:focus:ring-indigo-600"
            id="salary"
            name="salary"
            wire:model="salary"
        >
            <option>-- Seleccione un rango --</option>
            @foreach ($salaries as $salary)
                <option value="{{ $salary->id }}">{{ $salary->salary }}
                </option>
            @endforeach

        </select>

        @error('salary')
            <livewire:show-error
                class="mt-2"
                :message="$message"
            />
        @enderror
    </div>

    <div>
        <x-input-label
            for="category"
            :value="'Categoría'"
        />
        <select
            class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-indigo-600 dark:focus:ring-indigo-600"
            id="category"
            name="category"
            wire:model="category"
        >
            <option>-- Seleccione una categoría --</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->category }}
                </option>
            @endforeach

        </select>

        @error('category')
            <livewire:show-error
                class="mt-2"
                :message="$message"
            />
        @enderror
    </div>

    <div>
        <x-input-label
            for="company"
            :value="'Nombre de la empresa'"
        />
        <x-text-input
            class="mt-1 block w-full"
            id="company"
            name="company"
            type="text"
            wire:model="company"
            :value="old('company')"
            placeholder="Nombre de la empresa: ej. Google, Netflix, Shopify ..."
        />

        @error('company')
            <livewire:show-error
                class="mt-2"
                :message="$message"
            />
        @enderror
    </div>

    <div>
        <x-input-label
            for="last_day_of_vacant"
            :value="'Último día para aplicar la vacante'"
        />
        <x-text-input
            class="mt-1 block w-full"
            id="last_day_of_vacant"
            name="last_day_of_vacant"
            type="date"
            wire:model="last_day_of_vacant"
            :value="old('last_day_of_vacant')"
            min="{{ now()->format('Y-m-d') }}"
            placeholder="Último día para aplicar la vacante"
        />

        @error('last_day_of_vacant')
            <livewire:show-error
                class="mt-2"
                :message="$message"
            />
        @enderror

    </div>

    <div>
        <x-input-label
            for="description"
            :value="'Descripción de la vacante'"
        />
        <textarea
            class="h-72 min-h-[100px] w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-indigo-600 dark:focus:ring-indigo-600"
            id="description"
            name="description"
            wire:model="description"
            placeholder="Descripción del puesto, experiencia, tipo de trabajo a realizar y cualquier información relevante de la vacante"
        ></textarea>
        @error('description')
            <livewire:show-error
                class="mt-2"
                :message="$message"
            />
        @enderror
    </div>

    <div>
        <x-input-label
            for="image"
            :value="'Imagen de la empresa o que se desee mostrar en la vacante'"
        />
        <x-text-input
            class="mt-1 block w-full"
            id="image"
            name="image"
            type="file"
            wire:model="image"
            accept="image/*"
        />

        @if ($image)
            <div
                class="max-width-[400px] max-heigth-[400px] mt-3 flex w-full justify-center">
                <img
                    class="h-40 w-40 rounded-lg border-2 border-dashed border-gray-600 object-cover"
                    src="{{ $image->temporaryUrl() }}"
                    alt="Imagen de la vacante"
                >

            </div>
        @endif
        @error('image' && $image !== '')
            <livewire:show-error
                class="mt-2"
                :message="$message"
            />
        @enderror
    </div>

    <x-primary-button class="flex w-full items-center justify-center">
        <span>Crear vacante</span>
    </x-primary-button>
</form>
