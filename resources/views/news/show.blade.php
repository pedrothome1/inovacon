@extends('layouts.app')

@section('title', $noticia->title . ' | Inovacon')

@section('head')
    <meta property="og:type"          content="article" />
    <meta property="og:title"         content="{{ $noticia->title }} | Inovacon" />
    <meta property="og:description"   content="{{ str_limit(strip_tags($noticia->body), 100) }}" />
    <meta property="og:image"         content="{{ $noticia->publicImagePath }}" />
@endsection

@section('content')
	<div id="news" class="container">
		<div class="row">
			<div class="col-sm-8">
				<div class="card">
					<div class="card-header bg-primary">
						<h5 class="text-white font-weight-bold mb-0">
							<i class="fas fa-newspaper mr-1"></i>
							{{ $noticia->title }}
						</h5>

					</div>

					<div class="card-body no-gutters">
						<div class="small text-dark">Publicado em <strong>{{ $noticia->created_at->format('d/m/Y') }}</strong></div>

						<div class="col-md-10 my-3 text-center mx-auto">
							<img style="object-fit: cover;" class="img-thumbnail w-100" src="{{ $noticia->publicImagePath }}"/>
						</div>

						<div class="col">
							<div class="text-justify course-description">
								{!! $noticia->body !!}
							</div>
						</div>
					</div>

					<div class="my-3"></div>

					<div class="card-footer">
						<div class="align-self-end">
                            <social-sharing
                                title="{{ $noticia->title }}"
                                description="{{ str_limit(strip_tags($noticia->body), 100) }}"
                                quote="{{ $noticia->title }}"
                                inline-template>

                                <div>
                                    <network network="facebook">
                                        <i class="fab fa-facebook-f text-facebook fa-lg mx-1"></i>
                                    </network>

                                    <network network="whatsapp">
                                        <i class="fab fa-whatsapp text-whatsapp fa-lg mx-1"></i>
                                    </network>

                                    <network network="email">
                                        <i class="fas fa-envelope text-email fa-lg mx-1"></i>
                                    </network>
                                </div>

                            </social-sharing>
						</div>
					</div>

				</div>
			</div>

			<div id="newsRelated" class="col-sm-4">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="font-weight-bold text-primary">
							VEJA TAMBÉM
						</h5>

					</div>
						<hr class="my-0 border-primary border-2">

					<div class="card-body px-1">
						<ul class="list-group list-group-flush">
							@forelse ($outrasNoticias as $n)
								<li class="list-group-item border-0 p-2">
									<a href="{{ route('news.show', $n) }}" class="link">
										<div class="row no-gutters">
											<div class="col-4 my-auto">
												<img class="img-fluid" src="{{ $n->publicImagePath }}" alt="">
											</div>

											<div class="col d-flex flex-column justify-content-around pl-2">
												<span class="related-title small text-secondary text-uppercase font-weight-600">
													{{ str_limit($n->title, 70) }}
												</span>

												<span class="small text-muted">
													{{ strftime("%d de %B de %Y", strtotime($n->created_at)) }}
												</span>
											</div>
										</div>
									</a>
								</li>
							@empty
								<li class="list-group-item border-0 p-2">Não há notícias relacionadas</li>
							@endforelse
						</ul>
					</div>
				</div>
			</div>
		</div>

	</div>
@endsection
