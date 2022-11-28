

<div class="form-group">
    <label for="exampleFormControlFile1" class="colorTextLabel">Avatar*</label>
    <input type="file" accept="image/*"class="form-control-file" name="img" {{$user ? '' : 'required'}}>
    <small id="emailHelp" class="form-text text-muted">JPG ou PNG no tamanho: Largura 210px X Altura
        210px.</small>
</div>

<div class="form-group">
    <label for="exampleInputEmail1" class="colorTextLabel">Nome*</label>
    <input type="text" name="nome" class="form-control" aria-describedby="emailHelp"
        placeholder="Nome" value="{{$user ? $user->atendente->nome : ''}}" required>
</div>

<div class="form-group">
    <label for="exampleInputEmail1" class="colorTextLabel">Email*</label>
    <input type="email" name="email" class="form-control" aria-describedby="emailHelp"
        placeholder="Email" value="{{$user ? $user->email : ''}}" required>
</div>

<div class="form-group">
    <label for="exampleInputEmail1" class="colorTextLabel">Usuário*</label>
    <input type="text" name="usuario" class="form-control"=aria-describedby="emailHelp"
        placeholder="Usuário" value="{{$user ? $user->name : ''}}" required>
</div>

<div class="form-group">
    <label for="exampleInputEmail1" class="colorTextLabel">Comissão*</label>
    <input type="text" name="comissao" class="form-control" aria-describedby="emailHelp"
        placeholder="Comissão" value="{{$user ? $user->atendente->comissao : ''}}" required>
    <small id="emailHelp" class="form-text text-muted">Comissão em %.</small>
</div>

<div class="form-group">
    <label for="exampleInputEmail1" class="colorTextLabel">Descrição*</label>
    <textarea name="descricao" name="descricao" class="form-control" aria-label="With textarea" required>{{$user ? $user->atendente->descricao : ''}}</textarea>
</div>

<div class="form-group">
    <label for="exampleInputPassword1" class="colorTextLabel">Senha*</label>
    <input type="password" name="senha" class="form-control" placeholder="Senha" {{$user ? '' : 'required'}}>
</div>

<div class="form-group">
    <label for="exampleInputPassword1" class="colorTextLabel">Confirmar Senha*</label>
    <input name="confirmSenha" type="password" class="form-control" placeholder="Confirmar Senha"
    {{$user ? '' : 'required'}}>
</div>