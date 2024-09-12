<x-app-layout>
    <div>
        <h1>{{ $certificado->descricao }}</h1>
        <p>{{ $certificado->membro->nome }}</p>
        <p>{{ $certificado->horas }} horas</p>
        <p>{{ $certificado->data }}</p>
        <p>{{ $certificado->token }}</p>
        <a href="{{ route('certificados.download', $certificado) }}">{{ __('Download PDF') }}</a>
        <a href="{{ route('certificados.view', $certificado) }}">{{ __('View PDF') }}</a>
        <a href="{{ route('certificados.downloadCertificate', $certificado) }}">{{ __('Download Certificate') }}</a>
    </div>
</x-app-layout>