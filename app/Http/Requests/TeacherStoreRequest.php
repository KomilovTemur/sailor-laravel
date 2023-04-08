<?php

    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class TeacherStoreRequest extends FormRequest
    {
        /**
         * Determine if the user is authorized to make this request.
         */
        public function authorize(): bool
        {
            return true;
        }

        /**
         * Get the validation rules that apply to the request.
         *
         * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
         */
        public function rules(): array
        {
            return [
                'name' => 'required',
                'address' => 'required',
                'science' => 'required',
                'email' => 'required|email|unique:teacher',
                'phone' => 'required|unique:teacher',
                'image' => 'mimes:png,jpg,jpeg,jfif,pjpeg,pjp,svg, '
            ];
        }

    }
