<div class="form-group">
    <label for="exampleInputEmail1" class="colorTextLabel">Nome*</label>
    <input type="text" name="nome" class="form-control" aria-describedby="emailHelp" placeholder="Nome"
        value="{{ $user && $user->cliente->nome ? $user->cliente->nome : '' }}" required>
</div>

<div class="form-group">
    <label for="exampleInputEmail1" class="colorTextLabel">Email*</label>
    <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Email"
        value="{{ $user ? $user->email : '' }}" required>
</div>

<div class="form-group">
    <label for="exampleInputEmail1" class="colorTextLabel">Usuário*</label>
    <input type="text" name="usuario" class="form-control"=aria-describedby="emailHelp" placeholder="Usuário"
        value="{{ $user ? $user->name : '' }}" required>
</div>

<div class="form-group">
    <label for="exampleInputEmail1" class="colorTextLabel">Telefone*</label>
    <input type="text" name="telefone" class="form-control" placeholder="Usuário"
        value="{{ $user && $user->cliente->telefone ? $user->cliente->telefone : '' }}" required>
</div>

<div class="form-group">
    <label for="exampleInputEmail1" class="colorTextLabel">Sexo*</label>

    <select class="custom-select" id="sexo" name="sexo">

        <option {{ $user && $user->cliente->sexo == 'Masculino' ? 'selected' : '' }} value="Masculino">Masculino
        </option>
        <option {{ $user && $user->cliente->sexo == 'Feminino' ? 'selected' : '' }} value="Feminino">Feminino</option>
        <option {{ $user && $user->cliente->sexo == 'Outros' ? 'selected' : '' }} value="Outros">Outros</option>
    </select>
</div>

<div class="form-group">
    <label for="exampleInputEmail1" class="colorTextLabel">Data de nascimento*</label>
    <input type="date" name="nascimento" class="form-control"
        value="{{ $user && $user->cliente->nascimento ? $user->cliente->nascimento : '' }}" required>
</div>

<div class="form-group">
    <label for="exampleInputEmail1" class="colorTextLabel">Tempo*</label>
    <input type="text" name="tempo" class="form-control"
        value="{{ $user && $user->cliente->tempo ? $user->cliente->tempo : '' }}" required>
        <small>Tempo em minutos e segundos MM:SS</small>
</div>

<div class="form-group">
    <label for="exampleInputPassword1" class="colorTextLabel">Senha*</label>
    <input type="password" name="senha" class="form-control" placeholder="Senha" {{ $user ? '' : 'required' }}>
 
</div>

<div class="form-group">
    <label for="exampleInputPassword1" class="colorTextLabel">Confirmar Senha*</label>
    <input name="confirmSenha" type="password" class="form-control" placeholder="Confirmar Senha"
        {{ $user ? '' : 'required' }}>
</div>
