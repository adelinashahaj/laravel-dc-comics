<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
                'title' => 'required|max:50',
                'description' => 'nullable|max:65535',
                'thumb' => 'required|url|max:255',
                'price' => 'required|max:10',
                'series' => 'required|max:30',
                'sale_date' => 'required',
                'type' => 'required|max:50',
        ];
    }

    public function messages() {
        return [
            'title.required' => "Il titolo è richiesto",
            'title.max' => "Il titolo deve essere al massimo di 50 caratteri",
            'description.max' => "La descrizione deve essere lunga al massimo 65535 caratteri",
            'thumb.required' => "Url dell'immagine richiesta",
            'thumb.url' => "L'url dell'immagine deve essere valida, esempio: http://www.miosito.com",
            'thumb.max' => "L'url dell'immagine deve essere al massimo di 255 caratteri",
            'price.required' => "Il prezzo è richiesto",
            'price.max' => "Il campo prezzo deve essere al massimo di 10 caratteri",
            'series.required' => "La serie è richiesta",
            'series.required' => "La serie deve essere al massimo di 30 caratteri",
            'sale_sate.required' => "La data è richiesto",
            'type.required' => "Il tipo è richiesto",
            'type.max' => "Il tipo deve essere al massimo di 50 caratteri",

        ];
    }
}
